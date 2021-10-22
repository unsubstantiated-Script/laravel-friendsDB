<label for="first_name" class="form-label">First Name</label>
<input type="text" class="form-input" name="first_name" id="first_name" {{-- Preserving the inputted value --}}
    value="{{ old('first_name', $friend->first_name) }}">
<label for="last_name" class="form-label">Last Name</label>
<input type="text" class="form-input" name="last_name" id="last_name"
    value="{{ old('last_name', $friend->last_name) }}">
<label for="age" class="form-label">Age</label>
<select name="age" class="form-select">
    @foreach (range(18, 100) as $ageOption)
        {{-- preserving the value of the select with a ternary operator --}}
        <option value="{{ $ageOption }}" {{ in_array($ageOption, [$friend->age, old('age')]) ? 'selected' : '' }}>
            {{ $ageOption }}</option>
    @endforeach
</select>
