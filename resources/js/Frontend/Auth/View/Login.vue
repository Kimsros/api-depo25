<template>
    <div>
        <main class="main cart">
			<div class="page-content pt-7 pb-10">
				<div class="container mt-7 mb-2">
					<div class="row">
                        <div class="col-lg-4 sticky-sidebar-wrapper"></div>
						<div class="col-lg-4 sticky-sidebar-wrapper">
							<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
								<div class="summary mb-4">
									<h3 class="summary-title text-left">Login</h3>
									<div class="shipping-address">
										<input type="text" class="form-control" name="code" placeholder="Email or User name" />
										<input type="password" class="form-control" name="code" placeholder="Password" />
										<a href="#" class="btn btn-md btn-dark btn-rounded btn-outline">Login</a>
                                        <a href="/register" class="btn btn-md btn-dark btn-rounded btn-outline">Register</a>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-lg-4 sticky-sidebar-wrapper"></div>
					</div>
				</div>
			</div>
		</main>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>