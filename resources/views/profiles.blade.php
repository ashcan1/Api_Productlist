@php
usort($data,function($a,$b) {return strnatcasecmp($a['label'],$b['label']);});

    
    @endphp
<table border = "1">
    <tr>
           
      
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item['label']}}

        @if (isset($item["children"]))
        @foreach ($item["children"] as $child_key => $child_value)
          <li class="childs">{{ $child_value["label"] }}</li>
        @endforeach
    @endif
        </td>
    </tr>
     @endforeach
</table>

