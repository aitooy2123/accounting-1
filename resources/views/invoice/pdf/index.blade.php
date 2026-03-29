<h2>ใบเสนอราคา</h2>

<p>เลขที่: {{ $quotation->quotation_no }}</p>

<table width="100%" border="1" cellpadding="5">
  <tr>
    <th>รายการ</th>
    <th>จำนวน</th>
    <th>ราคา</th>
    <th>รวม</th>
  </tr>

  @foreach ($quotation->items as $item)
    <tr>
      <td>{{ $item['description'] }}</td>
      <td>{{ $item['qty'] }}</td>
      <td>{{ number_format($item['price'], 2) }}</td>
      <td>{{ number_format($item['qty'] * $item['price'], 2) }}</td>
    </tr>
  @endforeach

</table>

<h3>รวม: {{ number_format($quotation->total, 2) }}</h3>
