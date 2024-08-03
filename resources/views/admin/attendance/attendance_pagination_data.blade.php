 <?php //echo '<pre>';print_r($attendances); ?>
 @if((!$attendances->isEmpty()))
     @foreach ($attendances as $attendance)
        <tr class="border-b border-gray-200">
            <td class="border px-8">{{ $attendance->name }}</td>
            <td class="border px-8">{{ $attendance->mobilenumber }}</td>
            <td class="border px-8">
            @php
                $formattedDate = \Carbon\Carbon::createFromFormat('Y-m-d', $attendance->date)->format('d-m-y');
            @endphp
            {{ $formattedDate }}
        </td>
            <td class="border px-8">
            @php
        $formattedTime = \Carbon\Carbon::createFromFormat('H:i:s', $attendance->clock_in)->format('g:i A');
    @endphp
                {{ $formattedTime }}</td>           
            <td class="border px-8">
            @php
        $formattedTime = \Carbon\Carbon::createFromFormat('H:i:s', $attendance->break_start)->format('g:i A');
    @endphp
                {{ $formattedTime }}</td>           
            <td class="border px-8">
            @php
        $formattedTime = \Carbon\Carbon::createFromFormat('H:i:s', $attendance->break_end)->format('g:i A');
    @endphp
                {{ $formattedTime }}</td>           
            <td class="border px-8">
            @php
        $formattedTime = \Carbon\Carbon::createFromFormat('H:i:s', $attendance->break_time)->format('g:i A');
    @endphp
                {{ $formattedTime }}</td>           
            <td class="border px-8">
            @php
        $formattedTime = \Carbon\Carbon::createFromFormat('H:i:s', $attendance->clock_out)->format('g:i A');
    @endphp
                {{ $formattedTime }}</td>           
          
            <td class="border px-8">
            @php
        $formattedTime = \Carbon\Carbon::createFromFormat('H:i:s', $attendance->total_time)->format('g:i A');
    @endphp
            {{ $formattedTime }}
            </td>           
          
            <td class="border px-8 text-center">
               
                <form method="POST" action="{{ route('attendance.destroy', $attendance->id) }}" class="">
                        @csrf
                        {{ method_field('DELETE') }}                                   
                        <!-- <a href="/admin/attendance/{{ $attendance->id }}/show" class="bg-primary text-white p-2 ml-2  approval"><i class="fa fa-eye" title="View"></i></a>  
 -->
                      <a href="/admin/attendance/{{ $attendance->id }}/edit" class="bg-success mr-3 text-white p-2 ml-2 "><i class="fa fa-edit text-white" title="Edit"></i></a>
                         
                        <button class="bg-danger text-white p-1 px-2 ml-2 " onclick="return confirm('Are you sure you want to delete?');">
                        <i class="fa fa-trash text-black" title="Delete"> </i>    
                        </button>
                </form>
            </td>
        </tr>
    @endforeach
@else
    <tr>
       <td colspan="10" align="center">
       <?php echo date('d-m-Y'); ?>   No Data Found.
       </td>
    </tr>
@endif
<tr>
   <td colspan="10" align="center">
    <div class="pagination"> 
        {!! $attendances->links() !!}
    </div>
   </td>
</tr>