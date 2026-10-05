<!DOCTYPE html>
<html>
<head>
    <title>Add Project</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 11px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        .error {
            color: #e74c3c;
            margin-bottom: 15px;
        }

        button,
        .back {
            display: inline-block;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        button {
            background: #2563eb;
        }

        button:hover {
            background: #1d4ed8;
        }

        .back {
            background: #555;
            margin-left: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add New Project</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('admin.projects.store') }}" method="POST">

        @csrf

        <label>Project Title</label>
        <input type="text" name="title" value="{{ old('title') }}">

        <label>Description</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <label>Technology</label>
        <input type="text" name="technology" value="{{ old('technology') }}">

        <label>Project Link (Optional)</label>
        <input type="url" name="link" value="{{ old('link') }}" placeholder="Optional - https://example.com">

        <button type="submit">
            Add Project
        </button>

        <a href="{{ route('admin.projects') }}" class="back">
            Back
        </a>

    </form>

</div>

</body>
</html>