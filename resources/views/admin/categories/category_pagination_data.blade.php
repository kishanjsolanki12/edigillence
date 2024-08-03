 <?php //echo '<pre>';print_r($categories); ?>
 @if((!$categories->isEmpty()))
     @foreach ($categories as $category)
        <tr class="border-b border-gray-200">
            <td class="border px-8">{{ $category->title }}</td>          
            <td class="border px-8">{{ $category->status==1?'Active':'Deactive' }}</td>
            <td class="border px-8 text-center">
               
                <form method="POST" action="{{ route('categories.destroy', $category->id) }}" class="">
                        @csrf
                        {{ method_field('DELETE') }}                                   
                        <!-- <a href="/admin/categories/{{ $category->id }}/show" class="bg-primary text-white p-2 ml-2  approval"><i class="fa fa-eye" title="View"></i></a>  
 -->
                      <a href="/admin/categories/{{ $category->id }}/edit" class="bg-success mr-3 text-white p-2 ml-2 "><i class="fa fa-edit text-white" title="Edit"></i></a>
                      <?php //if($category->id != 1){ ?>
                        <button class="bg-danger text-white p-1 px-2 ml-2 " onclick="return confirm('Are you sure you want to delete?');">
                        <i class="fa fa-trash text-white" title="Delete"> </i>    
                        </button>
                     <?php //} ?>
                </form>
            </td>
        </tr>
    @endforeach
@else
    <tr>
       <td colspan="5" align="center">
        No Data Found.
       </td>
    </tr>
@endif
<tr>
   <td colspan="5" align="center">
    <div class="pagination"> 
        {!! $categories->links() !!}
    </div>
   </td>
</tr>