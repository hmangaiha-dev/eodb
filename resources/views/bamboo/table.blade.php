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
            <th class="text-center"> Year of planting/ raising </th>
            <th class="text-center">
                Species of bamboo raised or planted
            </th>
            <th class="text-center">
                No. of bamboo raised or planted
            </th>
            <th class="text-center">
                Approx. total no. of bamboo available during verification
            </th>
            <th class="text-center">
                Approx. total no. of mature bamboo available during verification

            </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($details as $index => $detail)
            <tr>
                <td class="text-center">{{ $detail->year }}</td>
                <td class="text-center"> {{ $detail->species }} </td>
                <td class="text-center">{{ $detail->nos }}</td>
                <td class="text-center">{{ $detail->total_bamboo }}</td>
                <td class="text-center">{{ $detail->total_mature }}</td>

            </tr>
        @endforeach


    </tbody>
</table>
