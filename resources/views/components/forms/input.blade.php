                      @props(['name', 'label' =>'' ,'placeholder'=>'' ,'type'=>'text', 'value'=>''])  
                  
                                 <div class="col" style="padding: 15px; margin-left:25px;"> 
                                 @if($label)                 
                                    <label>{{ $label }} <span class="required_star">*</span></label> 
                                    @endif                
                                    <input 
                                    type="{{ $type }}"
                                    name="{{$name}}" 
                                    value="{{ $value }}"
                                    id='{{ $name }}Input'
                                    placeholder="{{$placeholder}}"
                                    {{ $attributes->merge(['class' => 'form-control']) }}
                                    >
                                    @error($name)
                                   <div class="from text text-danger">{{ $message }}</div>
                                       @enderror
                                  </div>