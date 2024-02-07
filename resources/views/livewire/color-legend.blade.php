<div class="flex flex-col items-center">
    <span class="my-3 font-semibold text-xs uppercase tracking-widest text-gray-900 dark:text-white">Choose Legend</span>
    <div x-data="{ color: '' }" class="flex flex-col items-center justify-center gap-x-4">
        <div class="flex gap-x-4">
            @foreach ($colorLegendSwatches as $swatch)
            <div>
                <label for="{{ $swatch }}" class="bg-[{{ $swatch }}] p-2 rounded-full flex items-center justify-center" style="background: {{$swatch}}">
                    <input x-model='color' type="radio" id="{{ $swatch }}" name="client_color_legend" class="p-3 rounded-full ring-[{{ $swatch }}] text-[{{ $swatch }}] bg-[{{ $swatch }}] border-white focus:ring-[{{ $swatch }}] dark:focus:ring-[{{ $swatch }}] dark:ring-offset-[{{ $swatch }}] dark:focus:ring-offset-[{{ $swatch }}] focus:ring-2 dark:bg-[{{ $swatch }}] dark:border-[{{ $swatch }}]" value="{{$swatch}}">
                </label>
            </div>
            @endforeach
            <div class="flex flex-col">
                <input x-model='color' type="color" class="odc-clr-picker" name="client_color_legend">
            </div>
        </div>
        <div class="flex flex-col items-center mt-3 font-semibold text-xs uppercase tracking-widest text-gray-900">
            <p>Color: <span x-text="color"></span></p>
        </div>
    </div>
</div>
