 <?php //echo '<pre>';print_r($users); ?>
 @if((!$users->isEmpty()))
     @foreach ($users as $user)
        <tr class="border-b border-gray-200">
            <td class="border px-8">{{ $user->name }}</td>
            <td class="border px-8">{{ $user->email }}</td>
            <td class="border px-8">{{ $user->mobilenumber }}</td>           
            <td class="border px-8">
                <?php 
                if($user->user_type == 1){
                    echo "Super Admin";
                }
                elseif ($user->user_type == 2) {
                    echo "Admin";
                }
                elseif ($user->user_type == 3) {
                    echo "HR";
                }
                elseif ($user->user_type == 4) {
                    echo "Office Staff";
                }
                elseif ($user->user_type == 5) {
                    echo "User";
                }
                elseif ($user->user_type == 6) {
                    echo "Approver";
                }
                ?>
            </td>
            <td class="border px-8 text-center">
               
                <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="">
                        @csrf
                        {{ method_field('DELETE') }}                                   
                        <!-- <a href="/admin/users/{{ $user->id }}/show" class="bg-primary text-white p-2 ml-2  approval"><i class="fa fa-eye" title="View"></i></a>  
 -->
                      <a href="/admin/users/{{ $user->id }}/edit" class="bg-success mr-3 text-white p-2 ml-2 "><i class="fa fa-edit text-white" title="Edit"></i></a>
                         <?php if($user->id != 1){ ?>
                        <button class="bg-danger text-white p-1 px-2 ml-2 " onclick="return confirm('Are you sure you want to delete?');">
                        <i class="fa fa-trash text-white" title="Delete"> </i>    
                        </button>
                       <?php } ?>
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
        {!! $users->links() !!}
    </div>
   </td>
</tr>