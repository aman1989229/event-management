<div class="row">
		<div class="col-md-12">
			
			     <table class="table">
              <thead>
                <tr>
                  <th scope="col">S.n.</th>
                  <th scope="col">Title</th>
                  <th scope="col">Body</th>
                  <th scope="col">Created At</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                   <tr>
                    <td>1: </td>
                   	<td>{{ $post->title }}</td>
                   	<td>{{ substr( strip_tags($post->body) , 0 ,50 ) }} {{strlen(strip_tags($post->body))>50 ?"...." :"" }}</td>
                   	<td>{{ date('M j, Y',strtotime($post->created_at)) }}</td>
                   	<td><a href="#" class="btn btn-success btn-sm">View</a> <a href="#
                   	" class="btn btn-warning btn-sm">Edit</a></td>
                   </tr>
                   
                  @endforeach
              </tbody>
            </table>
            
            <!--pagination links starts here-->
            
		</div>
     </div>