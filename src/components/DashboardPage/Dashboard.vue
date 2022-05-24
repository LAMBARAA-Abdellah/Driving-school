<template>
	<div class="container-fluid">
  <section>
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h5 class="text-uppercase">Minimal Statistics Cards</h5>
        <p>Statistics on minimal cards.</p>
      </div>
    
   
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fa fa-automobile text-info fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>16</h3>
                <p class="mb-0">Cars</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-info">12</h3>
                <p class="mb-0">Monitors</p>
              </div>
              <div class="align-self-center">
                <i class="far fa-life-ring text-info fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    
     
    
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-warning">156</h3>
                <p class="mb-0">New Clients</p>
              </div>
              <div class="align-self-center">
                <i class="far fa-user text-success fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
  
   
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
                <i class="fas fa-chart-line text-success fa-3x"></i>
              </div>
              <div class="text-end">
                <h3>64.89 %</h3>
                <p class="mb-0">Bounce Rate</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
</div>
  </section>
</div>
</template>

<script >
export default {
    name: 'Dashboard',
    props: {
        msg: String
    }
}

</script>

<style lang="scss" scoped>

</style>