<h1>一覧表示</h1>

<table>
<tr>
<th>問題集名</th>
<th>問題番号</th>
<th>分野</th>
<th>分類</th>
<th>難易度</th>
<th>使用日</th>
<th>作成日</th>
<th>更新日</th>
</tr>
@foreach($phys_prob_lists as $phys_prob_lists)
<tr>
<td>{{$phys_prob_lists->Workbook}}</td>
<td>{{$phys_prob_lists->ProbNo}}</td>
<td>{{$phys_prob_lists->Field}}</td>
<td>{{$phys_prob_lists->Class}}</td>
<td>{{$phys_prob_lists->Level}}</td>
<td>{{$phys_prob_lists->UsedDay}}</td>
<td>{{$phys_prob_lists->updated_at}}</td>
<td>{{$phys_prob_lists->created_at}}</td>
</tr>
@endforeach
</table>







