@props(['name', 'label' =>'' ,'placeholder'=>'' ,'type'=>'', 'value'=>'', 'options'=>''])

<div class="col" style="padding: 15px; margin-left:25px;">
  @if($label)
  <label>{{$label}}<span class="required_star">*</span></label>
  @endif
  <select name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control']) }} >
    <option value="">--select--</option>
    @foreach($options as $key => $option)
    <option value="{{$key}}">{{$option}}</option>
    @endforeach
  </select>
</div>