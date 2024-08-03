 <?php //echo '<pre>';print_r($banners); ?>
 @if((!$hirings->isEmpty()))
     @foreach ($hirings as $hiring)
        <tr class="border-b border-gray-200">
            <td class="border px-8">{{ $hiring->name }}</td>          
            <td class="border px-8">{{ $hiring->email }}</td>
            <td class="border px-8 text-center">
               {{$hiring->hiringfor}}
            </td>
            <td class="border px-8 text-center">
            <a href="{{ asset('storage/resume/'.$hiring->resume) }}" class="bg-success mr-3 text-white p-2 ml-2 "><i class="fa fa-edit text-white" title="Edit"></i></a>
              <!-- <a href="" target="_blank">{{$hiring->resume}}</a> -->
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
        {!! $hirings->links() !!}
    </div>
   </td>
</tr>