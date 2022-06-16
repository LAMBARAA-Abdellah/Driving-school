<template>

  <div class=" container">
    <h4>Ajouter seance</h4>
    <form class="form-inline">
      <div class="form-group">
        <label for="email">Type seance</label>
        <select name="" id="" class="form-control">
          <option value="Femme"> conduite</option>
          <option value="Homme"> code</option>

        </select>
      </div>
      <div class="form-group">
        <label for="email">Date seance</label>
        <input type="date" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="debut">Heure debut</label>
        <input type="time" class="form-control" id="debut" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-group">
        <label class="tt" for="fin">Heure fin</label>
        <input type="time" class="form-control" id="fin" placeholder="Enter password" name="pwd">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Ajouter">
      </div>
    </form>
    
    <div class="list">
            <h4>Listes des séances</h4>
            <div class="overflow-x-auto">
  <div class="overflow-x-auto">
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Cy Ganderton</td>
        <td>Quality Control Specialist</td>
        <td>Blue</td>
      </tr>
      <!-- row 2 -->
      <tr class="hover">
        <th>2</th>
        <td>Hart Hagerty</td>
        <td>Desktop Support Technician</td>
        <td>Purple</td>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>3</th>
        <td>Brice Swyre</td>
        <td>Tax Accountant</td>
        <td>Red</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
    </div>
  </div>





</template>
<script>


export default {
  name: 'Hello',
  props: {

  },

  data() {
    return {

    }
  },


}


</script>
<style lang="scss" scoped>
@tailwind base;
@tailwind components;
@tailwind utilities;
$color-sousnavbar: #383838;
$hover: #F8CE03;

.container {
  margin-top: 20px;

  h4 {
    margin-bottom: 40px;
  }
}

.form-group {
  display: flex;
  flex-direction: column;
  align-items: flex-start;

  label {
    font-weight: bold;
  }
}
.btn{
  margin-top: 20px;
}
.form-inline {
  justify-content: space-evenly;

}

@media screen and (max-width: 576px) {}
</style>