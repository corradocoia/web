@php
    $total = 0;
    foreach ($row->content as $type) {
        // Assuming 20K m3 per hour, 720 hours (30 days), based on the uncompressed price
        $total += (($type->pivot->rate * 20000 * 720) / $type->volume) * $type->price->average;
    }
@endphp
{{number_format($total, 2)}}