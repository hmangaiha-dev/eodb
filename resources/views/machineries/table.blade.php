<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

</style>
<table padding border="1px" colspan="10">
    <thead>
        <tr>
            <th class="text-center"> Sl.No</th>
            <th class="text-center">
                Detail
            </th>
            <th class="text-center">
                Kilowatt (KW)
            </th>


        </tr>
    </thead>
    <tbody>
        @foreach ($details as $index => $detail)
            <tr>
                <td class="text-center"> {{ $index + 1 }} </td>
                <td class="text-center"> {{ $detail->detail }} </td>
                <td class="text-center">{{ $detail->kw }}</td>
                

            </tr>
        @endforeach


    </tbody>
</table>
