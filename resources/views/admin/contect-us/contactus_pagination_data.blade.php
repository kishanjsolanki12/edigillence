 <?php //echo '<pre>';print_r($pages); ?>
 @if((!$contectus->isEmpty()))
     @foreach ($contectus as $contect)
        <tr class="border-b border-gray-200">
            <td class="border px-8">{{ $contect->fname}}</td>         
            <td class="border px-8">{{ $contect->email }}</td>
            <td class="border px-8 ">
               {{$contect->message}}
            
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
        {!! $contectus->links() !!}
    </div>
   </td>
</tr>