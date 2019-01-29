@extends('layout.partials.head')
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">ACAD-Academic Adminstration</a>
    </div>
    <!-- /.navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button">
              <i class="fa fa-search"></i>
              </button>
              </span>
            </div>
            <!-- /input-group -->
          </li>
          <li>
            <a href="/">Dashboard</a>
          </li>
          <li>
            <a href="#">Department<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="/Department/create">Add a new Department</a></li>
                <li><a href="/Department">View Departments</a></li>
                <li><a href="/show_edit/Department">Edit existing Department</a></li>
                <li><a href="/show_delete/Department">Delete Department</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Courses<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li><a href="/Course/create">Add a new Course</a></li>
              <li><a href="/Course">View Courses</a></li>
              <li><a href="/show_edit/Course">Edit existing Course</a></li>
              <li><a href="/show_delete/Course">Delete Course</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Curriculum<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="/Curriculum/create">Add a new Curriclum</a></li>
                <li><a href="/Curriculum">View Curriculums</a></li>
                <li><a href="/show_edit/Curriculum">Edit Curriculum</a></li>
                <li><a href="/show_delete/Curriculum">Delete Curriculum</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Course Curriculum Mapping<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="/CourseCurriculumMapping/create">Add a new Course Curriclum Mapping</a></li>
                <li><a href="/CourseCurriculumMapping">View Course Curriculum Mappings</a></li>
                <li><a href="/show_edit/CourseCurriculumMapping">Edit Mappings</a></li>
                <li><a href="/show_delete/CourseCurriculumMapping">Delete Mappings</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Program<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="/Program/create">Add a new Program</a></li>
                <li><a href="/Program">View Programs</a></li>
                <li><a href="/show_edit/Program">Edit Program</a></li>
                <li><a href="/show_delete/Program">Delete Program</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Semester<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="/Semester/create">Add a new Semester</a></li>
                <li><a href="/Semester">View Semesters</a></li>
                <li><a href="/show_edit/Semester">Edit Semester</a></li>
                <li><a href="/show_delete/Semester">Delete Semester</a></li>
            </ul>
          </li>

  <li>
            <a href="#">Faculty<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="/Faculty/create">Add a new Faculty</a></li>
                <li><a href="/Faculty">View Faculty</a></li>
                <li><a href="/show_edit/Faculty">Edit Faculty</a></li>
                <li><a href="/show_delete/Faculty">Delete Faculty</a></li>
            </ul>
          </li>

          <li>
            <a href="#">Student<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="/Student/create">Add a new Student</a></li>
                <li><a href="/Student">View Student</a></li>
                <li><a href="/show_edit/Student">Edit Student</a></li>
                <li><a href="/show_delete/Student">Delete Student</a></li>
            </ul>
          </li>

        </ul>
      </div>
                <!-- /.sidebar-collapse -->
    </div>
            <!-- /.navbar-static-side -->
</nav>
