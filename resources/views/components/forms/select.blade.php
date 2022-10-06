@props(['name', 'label' =>'' ,'placeholder'=>'' ,'type'=>'', 'value'=>'','categories'=>''])

<div class="col" style="padding: 15px; margin-left:25px;">
  @if($label)
  <label>{{$label}}<span class="required_star">*</span></label>
  @endif
  <select name="{{$name}}" aria-label="Def
                                      ault select example">
    <option value="">--select</option>
    @foreach($categories as $category)

    <option value="{{$category->name}}">{{$category->name}}</option>
    @endforeach
    {{ $attributes->merge(['class' => 'form-select', 'form-control']) }}


  </select>
</div>