<template>
  <div class="box is-info">
	  <p>
		  <slot></slot>
	  </p>
  </div>
  <!-- /.box is-info -->
</template>

<script>
  export default {
    name: '',
    data() {
      return {

      }
    }
  }
</script>

<style>
	.box {
		background: #e3e3e3;
		padding: 10px;
		border: 1px solid #c5c5c5;
	}
</style>