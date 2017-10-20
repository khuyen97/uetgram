<!-- Modal -->
<div class="modal fade" id="addImageModal" role="dialog">
	<div class="modal-dialog">
						
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Image</h4>
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('image.addimg',[$album->id]) }}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="file" accept="image/png, image/jpeg, image/jpe, image/png, image/bmp" name="file[]" id="img-form" multiple required>
					<div id="image"></div>
					</br>
					<div class="form-group">
						<label class="form-label" for="title">Title:</label>
						<input class="form-control" type="text" placeholder="Title" name="title">
					</div>
					<div class="form-group">
						<label class="form-label" for="content">Description:</label>
						<textarea class="form-control" rows="3" placeholder="Content" name="content"></textarea>
					</div>
					<div class="form-group" style="text-align: center">                   
						<button id="add-img-bt" class="btn btn-success" disabled><i class="fa fa-arrow-up" area-hidden="true"></i> Post</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times-circle" area-hidden="true"></i> Cancel</button>
					</div>
                </form>
			</div>
		</div>
	</div>
</div>