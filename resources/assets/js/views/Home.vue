<template>
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="message" v-for="status in statuses">
					<div class="message-header">
						<p>
							{{ status.user.name }} said ...
						</p>

						<p>
							{{ status | ago }}
						</p>
					</div>
					<!-- /.panel-heading -->
					<div class="message-body" v-text="status.body"></div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel panel-default -->

				<add-to-stream @completed="addStatus"></add-to-stream>
			</div>
			<!-- /.col-md-8 col-md-offset-2 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</template>

<script>
	import moment from 'moment';
	import Status from "../models/Status";
	import AddToStream from '../components/AddToStream.vue';

	export default {
		components: { AddToStream },
		name: 'home',
		data() {
			return {
				statuses: []
			}
		},

		created() {
			Status.all( statuses => this.statuses = statuses );
		},

		filters: {
			ago() {
				return moment(status.created_at).fromNow();
			}
		},

		methods: {
			addStatus(status) {
				this.statuses.unshift(status);

				alert( "You status has been added." );

				window.scrollTo(0,0);
			}
		}
	}
</script>

<style>

</style>