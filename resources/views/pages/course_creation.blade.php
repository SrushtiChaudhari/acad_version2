@extends('layout.mainlayout')

@section('content')

  <form action="/Course/" method="post">
    Course Name:<input type="text" name="course_name" id="course_name">
    Course Code:<input type="text" name="course_code" id="course_code">
    Course Abbreviation:<input type="text" name="course_abbreviation" id="course_abbreviation">
    Syllaus Code:<input type="text" name="sylabus_code" id="syllabus_code">
    Theory?:<input type="text" name="theory" id="theory">
    <input type="submit" name="submit_btn">
  </form>

@endsection
