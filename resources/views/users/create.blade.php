<x-layout>
    <form action="{{ route('users.store') }}" method="POST">

    @csrf

    <h2>Create a New User</h2>

  <!-- User Name -->
  <label for="name">User Name:</label>
  <input type="text" id="name" name="name" value="{{ old('name') }}" required>

  <!-- User Strength -->
  <label for="skill">User Skill (0-100):</label>
  <input type="number" id="skill" name="skill" required>

  <!-- User Bio -->
  <label for="bio">Biography:</label>
  <textarea rows="5" id="bio" name="bio" required></textarea>

  <!-- select a person -->
  <label for="person_id">Person:</label>
  <select id="person_id" name="person_id" required>
    <option value="" disabled selected>Select a person</option>
    @foreach($persons as $person)
        <option value="{{ $person->id }}">
            {{$person->name}}
        </option>
    @endforeach
  </select>

  <button type="submit" class="btn mt-4">Create User</button>

  <!-- validation errors -->
  @if($errors->any())
    <div style="color:red; margin-top: 20px;">
      <h4>Form has following errors:</h4>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif


</form>

</x-layout>
