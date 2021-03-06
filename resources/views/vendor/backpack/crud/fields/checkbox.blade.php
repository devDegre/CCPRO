<!-- checkbox field -->

<div @include('crud::inc.field_wrapper_attributes') >
    @include('crud::inc.field_translatable_icon')
    <div class="checkbox">
        <input type="hidden" name="{{ $field['name'] }}" value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? 0 }}">
    	  <input type="checkbox"
          data-init-function="bpFieldInitCheckbox"

          @if (old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? false)
                 checked="checked"
          @endif

          @if (isset($field['attributes']))
              @foreach ($field['attributes'] as $attribute => $value)
    			{{ $attribute }}="{{ $value }}"
        	  @endforeach
          @endif
          >
    	<label class="form-check-label font-weight-normal" for="{{ $field['name'] }}_checkbox">{!! $field['label'] !!}</label>

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    </div>
</div>

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp
    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script>
            function bpFieldInitCheckbox(element) {
                var hidden_element = element.siblings('input[type=hidden]');

                // set the default checked/unchecked state
                // if the field has been loaded with javascript
                if (hidden_element.val() != 0) {
                  element.prop('checked', 'checked');
                } else {
                  element.prop('checked', false);
                }

                // when the checkbox is clicked
                // set the correct value on the hidden input
                element.change(function() {
                  if (element.is(":checked")) {
                    hidden_element.val(1);
                  } else {
                    hidden_element.val(0);
                  }
                })
            }
        </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
