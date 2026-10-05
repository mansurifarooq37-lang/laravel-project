<!DOCTYPE html>
<html>
<head>
    <title>Edit Enquiry</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 40px 20px;
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
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1f2937;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #2563eb;
            text-decoration: none;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('admin.enquiries') }}" class="back">
        ← Back to Enquiries
    </a>

    <h1>Edit Enquiry</h1>

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('admin.enquiries.update', $enquiry->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{ $enquiry->name }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ $enquiry->email }}">

        <label>Phone</label>
        <input type="text" name="phone" value="{{ $enquiry->phone }}">

        <label>Subject</label>
        <input type="text" name="subject" value="{{ $enquiry->subject }}">

        <label>Message</label>
        <textarea name="message">{{ $enquiry->message }}</textarea>

        <button type="submit">Update Enquiry</button>

    </form>

</div>

</body>
</html>