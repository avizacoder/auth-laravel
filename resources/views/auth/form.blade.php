<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" 
    value="{{ isset($user->name)?$user->name:old('name') }}"
    placeholder="Pablo">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email"
    value="{{ isset($user->email)?$user->email:old('email') }}"
    placeholder="name@example.com">
</div>
<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" 
    value="{{ isset($user->password)?$user->password:old('password') }}"
    placeholder="********">
</div>
<div class="mb-3">
    <label for="password-repeat" class="form-label">Password Repeat</label>
    <input type="password" class="form-control" id="password-repeat" name="password_repeat"
    value="{{ isset($user->password)?$user->password:old('password') }}" 
    placeholder="********">
</div>
<div class="mb-3">
    <label for="number-phone" class="form-label">Number Phone</label>
    <input type="number" class="form-control" id="number-phone" name="number_phone"
    value="{{ isset($user->number_phone)?$user->number_phone:old('number_phone') }}" 
    placeholder="74115408">
</div>
<div class="mb-3">
    <label for="cedula" class="form-label">C.I.</label>
    <input type="number" class="form-control" id="cedula" name="cedula_identidad"
    value="{{ isset($user->cedula_identidad)?$user->cedula_identidad:old('cedula_identidad') }}" 
    placeholder="20305566">
</div>
<div class="mb-3">
    <label for="date-birt" class="form-label">Date of Birt</label>
    <input type="text" class="form-control" id="date-birt" name="date_birt" 
    placeholder="10/11/2000"
    value="{{ isset($user->date_birt)?$user->date_birt:old('date_birt') }}">
</div>
<div class="mb-3">
    <label for="city-code" class="form-label">City Code</label>
    <input type="number" class="form-control" id="city-code" name="city_code"
    value="{{ isset($user->city_code)?$user->city_code:old('city_code') }}" 
    placeholder="12345">
</div>

<button class="btn btn-primary" type="submit">Save</button>
<a class="btn btn-success" href="{{ url('/register') }}">Cancel</a>
