<template>
  <div class="container-fluid">
    <div class="row" id="grid">
      <div class="col-xl-4 col-md-6 grid-item">
        <div class="card todo-list mb-30" v-if="!reRender">
          <div class="single-row p-0 border-bottom">
            <h4 class="font-20 py-3 pl-20 pr-20">Permission</h4>
          </div>
          <div
            v-for="(role_item, idx) in role_list.data"
            :key="idx"
            :class="{
              'single-row level-urgent border-bottom pt-3 pb-3': true,
              activeBg: currentActive == role_item.id ? true : false,
            }"
            @click="setActiveList(role_item.id)"
          >
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex position-relative">
                <a href="#" class="todo-text">
                  <p class="card-text mb-1">{{ role_item.name }}</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mb-30 mt-40">
          <form @submit.prevent="insertRoleData()">
            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <input
                    v-model="role"
                    type="text"
                    class="theme-input-style"
                    placeholder=" Pay Status"
                  />
                </div>
              </div>
              <div class="col-4">
                <input type="submit" value="Add Role" class="btn long" />
                <!-- <a href="#" class="btn long">Add role</a> -->
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-xl-8 col-md-8 grid-item">
        <div class="col-12">
          <div class="card mb-30">
            <div class="card-body pt-30">
              <h4 class="font-20">Basic Table</h4>
            </div>
            <div class="table-responsive">
              <!-- Invoice List Table -->
              <table class="text-nowrap card_color-bg dh-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Table</th>
                    <th>View</th>
                    <th>Add</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody v-if="!reRender">
                  <tr v-for="(item, idx) in permission" :key="idx">
                    <td>{{ item.id }}</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative mr-2">
                          {{ item.name }}
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative mr-2">
                          <input
                            @change="
                              insertOrRemoveData(
                                $event,
                                item.id,
                                currentActive,
                                1
                              )
                            "
                            type="checkbox"
                            :checked="item._view > 0 ? true : false"
                          />
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative mr-2">
                          <input
                            @change="
                              insertOrRemoveData(
                                $event,
                                item.id,
                                currentActive,
                                2
                              )
                            "
                            type="checkbox"
                            :checked="item._add > 0 ? true : false"
                          />
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative mr-2">
                          <input
                            @change="
                              insertOrRemoveData(
                                $event,
                                item.id,
                                currentActive,
                                3
                              )
                            "
                            type="checkbox"
                            :checked="item._update > 0 ? true : false"
                          />
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <label class="custom-checkbox position-relative mr-2">
                          <input
                            @change="
                              insertOrRemoveData(
                                $event,
                                item.id,
                                currentActive,
                                4
                              )
                            "
                            type="checkbox"
                            :checked="item._delete > 0 ? true : false"
                          />
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Invoice List Table -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      permission: [],
      role_list: [],
      role: null,
      currentActive: 1,
      reRender: false,
    };
  },
  created() {
    this.getPermissionData();
    this.getRoleData();
  },
  methods: {
    setActiveList(id) {

        this.currentActive = id;
        this.getPermissionData("/api/permission?role_id=" + id);

    },
    getPermissionData(url = null) {
      if (url != null) {
        axios.get(url).then((response) => {
          if (response.data.success) {
            this.permission = response.data.success;
          }
        });
      } else {
        axios.get("/api/permission").then((response) => {
          if (response.data.success) {
            this.permission = response.data.success;
          }
        });
      }
    },
    getRoleData(url = null) {
      if (url != null) {
        axios.get(url).then((response) => {
          if (response.data.success) {
            this.role_list = response.data.success;
          }
        });
      } else {
        axios.get("/api/role").then((response) => {
          if (response.data.success) {
            this.role_list = response.data.success;
          }
        });
      }
    },
    insertRoleData() {
      if (this.role) {
        axios.post("/api/role", { name: this.role }).then((response) => {
          if (response.data.success) {
            this.role = null;
            this.getRoleData();
          } else {
            alert(response.data.error);
          }
        });
      } else {
        alert("no");
      }
    },
    insertOrRemoveData(e, table_id, role_id, permission_type_id) {
      if (e.target.checked) {
        axios
          .post("/api/permission", {
            table_of_permission_id: table_id,
            role_id: role_id,
            permission_type_id: permission_type_id,
          })
          .then((response) => {
            this.reRender = true;
      this.$nextTick(() => {});
      this.reRender=false;
          })
          .catch((error) => {
            console.log(error);
          });
      } else {
        alert("no");
      }
    },
  },
};
</script>
<style scoped>
.activeBg {
  background: #f15922;
}
</style>
