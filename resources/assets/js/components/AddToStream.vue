<template>
	<div class="message">
		<div class="message-header">
			Push to the stream...
		</div>
		<!-- /.message-header -->
		<div class="message-body">
			<form @submit.prevent="onSubmit()" @keydown="form.errors.clear()">
				<p class="control">
					<textarea class="textarea" placeholder="I have something to say..." v-model="form.body"></textarea>
					<!-- /# -->

					<span class="help is-danger"
					      v-if="form.errors.has('body')"
					      v-text="form.errors.get('body')"></span>
					<!-- /.help is-danger -->
				</p>
				<!-- /.control -->

				<p class="control">
					<button class="button is-primary" :disabled="form.errors.any()">Submit</button>
					<!-- /.button is-primary -->
				</p>
				<!-- /.control -->
			</form>
		</div>
		<!-- /.message-body -->
	</div>
</template>

<script>
	export default {
		name: 'add-to-stream',

		data() {
			return {
				form: new Form( { body: '' } )
			}
		},

		methods: {
			onSubmit() {
				this.form
				    .post( '/statuses' )
				    .then( status => this.$emit( 'completed', status ) );
			}
		}

	}
</script>

<style>

</style>