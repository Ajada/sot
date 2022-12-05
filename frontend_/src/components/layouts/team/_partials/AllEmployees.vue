<template>
  <button @click.prevent="getEmployee" class="dropdown-item">
    {{ employee.name }}
  </button>
</template>

<script>
export default {
  props: {
    employee: Object
  },
  methods: {
    getEmployee () {
      this.$emit('employeeData', this.employee)
    }
  }
}
</script>

<style scoped lang="scss">
button{

}
</style>
