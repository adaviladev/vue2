<template>
	<div class="notification">
		<h1>{{ message }}</h1>
	</div>
	<!-- /.notification -->
</template>

<script>
  export default {
    name: 'notification',
    data() {
      return {
	      message: 'Hello World'
      }
    }
  }
</script>

<style lang="scss">
	.notification {
		background: green;
		color: red;
	}
</style>