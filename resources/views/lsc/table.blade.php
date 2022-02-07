

<table border="2px" padding colspan="2">
<thead>
<tr>
<th class="text-left">Sl.No</th>
<th class="text-left">Name</th>
<th class="text-right">Address</th>
<th class="text-right">Kum</th>
<th class="text-right">Caste</th>

</tr>
</thead>
<tbody>
@foreach ($details as $index => $detail)
<tr>
<td class="text-left"> {{ $index+1 }} </td>
<td class="text-left"> {{ $detail->name }} </td>
<td class="text-right">{{ $detail->address }}</td>
<td class="text-right">{{ $detail->kum }}</td>
<td class="text-right">{{ $detail->caste }}</td>

</tr>
@endforeach


</tbody>
</table>
