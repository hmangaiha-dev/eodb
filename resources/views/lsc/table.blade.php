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
                @if ($code == 'LAND_REVENUE_LSC')
                    Hming leh Pa/Pasal hming
                @else
                    Name as per EPIC/PAN/UID) Hming
                @endif
            </th>
            <th class="text-center">
                @if ($code == 'LAND_REVENUE_LSC')
                    Address
                @else
                    Kum
                @endif
            </th>
            <th class="text-center">
                @if ($code == 'LAND_REVENUE_LSC')
                    Kum
                @else
                    Hnathawh
                @endif
            </th>
            <th class="text-center">
                @if ($code == 'LAND_REVENUE_LSC')
                    Tribal nge/Non-Tribal
                @else
                    Chhungkaw pa ber nen inlaichinna
                @endif

            </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($details as $index => $detail)
            <tr>
                <td class="text-center"> {{ $index + 1 }} </td>
                <td class="text-center"> {{ $detail->name }} </td>
                <td class="text-center">{{ $detail->address }}</td>
                <td class="text-center">{{ $detail->kum }}</td>
                <td class="text-center">{{ $detail->caste }}</td>

            </tr>
        @endforeach


    </tbody>
</table>
