<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ikrIouGzqvsk06oj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/assigned-marks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mucGWyKoptYrQAxv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RAMprIfitBUAgvWH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yIbmnv4r7QB0mSYT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::99YvgrtTuvLImkny',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6fvk0AgWfnLunPxL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AxUttM1DAjdwtVoy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XrhRGptIguuzAtgQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qmACueLAGVRx0Hh9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YlWeiE8SJc8moKPF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3gP0mVxsdlurCtTl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::52K3ymOcRud3Aj8r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/pending-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xBUgpyn8LoQlOT5i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/studentCreate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B770PgTz82781gc3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/createStudent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oSjEEs4QeZnCpZAL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/adminCreate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N7Bb6oujiTM4B9z7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/teacherCreate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rn2BsKvskqwmvIkw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/createTeacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GKlvYQSMsex2ktVk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/dept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z1EY8C9R2yaVOjq6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin/createDept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ujQb5VqHs59uWRME',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pending-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nwfsgkMTsdCiXwYW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/import-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B2n3S56NWIgANCHX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/export-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'export-user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/import-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'import-user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QmrGj5KQc0iAtFV7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userAdmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ylLgYD6rG1Dz05C5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/signupTeacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eIdq8SV5SyGnJMiq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/teacherSignup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VLEBxuaFTiXxjC2A',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/studentSignup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QBPupDwe6WkPvL86',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/signupStudent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZcfneXpqWiS2DWjB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RgBrv77n5xEiSfzQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fNZ39oNj41qM6f6h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/courses/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MaTTSIS9FLRNALCe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/assigned_courses/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LKZB2EmCKuHTj7tp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/assigned_courses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TS1AaNIffENJzXJF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/assigned_courses/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qmsCm4Q3zriTalAm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_sessions/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1kAImNzYyQ7VS6lE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_sessions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::645jMIKMmeXszSYK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/add_sessions/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0DtSHBgzmOyMCj0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/enroll/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5vvm4vh2Vq1zpBbY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/enroll/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uI1FELlpWNv5RzGl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/enroll/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cq926vmo2J8UnJT8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/project/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5kTxUu3cHLsYLDl4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/project/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JqtwQOVptKITM55s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/student/project/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WhyfieTcAoJOZqsJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/running-courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q1sxu3xiuBRR9XTg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/marks-distribution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WPleI4q8W9eDdwYx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/marks-distribute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z64r7aPcjtdWcjRf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teacher/assign-marks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3hf33zcUbO1CakUo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|users/([^/]++)(*:32)|enrollment/([^/]++)(*:58)|course\\-enrollments/([^/]++)(*:93))|d(?|min/(?|a(?|pprove\\-user/([^/]++)(*:137)|ssigned_courses/(?|show/([^/]++)(*:177)|edit/([^/]++)(*:198)|update/([^/]++)(*:221)|delete/([^/]++)(*:244))|dd_sessions/delete/([^/]++)(*:280))|courses/(?|edit/([^/]++)(*:313)|update/([^/]++)(*:336)|delete/([^/]++)(*:359)|show/([^/]++)(*:380)))|d_session/(?|active/([^/]++)(*:418)|inactive/([^/]++)(*:443))))|/super\\-admin/(?|approve\\-user/([^/]++)(*:493)|createAdmin/([^/]++)(*:521))|/teacher/distributed\\-course/([^/]++)(*:567))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::42furlVJg3AZ4znj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BBONU2DgoWcNaQ5g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      93 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZMo6sABZroY33EQd',
          ),
          1 => 
          array (
            0 => 'courseId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tAvIiINPsGXrVuu2',
          ),
          1 => 
          array (
            0 => 'userid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NJUU3Yyo856lhef9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OhzNvpLtPMcilviX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pF201U2RPZjb2s2e',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ZvGhM9CjmXcpW5q',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ksMioj6foohpuj3X',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pME0goXGZObSQw47',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      336 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Eb8QcQ0Y7SjN0Aq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      359 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ptzM0OROlysFZSkA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bOQ4Qu7CTaxNbK5d',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'session.inactive',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'session.active',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KuJiCK0w7bv3ynXV',
          ),
          1 => 
          array (
            0 => 'userid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'createAdmin',
          ),
          1 => 
          array (
            0 => 'userId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6BFjiw71vAbsgxv5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ikrIouGzqvsk06oj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000f48b246000000001f381f29";}";s:4:"hash";s:44:"F00reXOmG6o0DW1weiHMxoU5sfhR7Vp6Yoqu5tB0Bg4=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ikrIouGzqvsk06oj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::42furlVJg3AZ4znj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminLayoutController@getTeachers',
        'controller' => 'App\\Http\\Controllers\\AdminLayoutController@getTeachers',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::42furlVJg3AZ4znj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BBONU2DgoWcNaQ5g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/enrollment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@getEnroll',
        'controller' => 'App\\Http\\Controllers\\StudentController@getEnroll',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BBONU2DgoWcNaQ5g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZMo6sABZroY33EQd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/course-enrollments/{courseId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@getCourseEnrollments',
        'controller' => 'App\\Http\\Controllers\\CourseController@getCourseEnrollments',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZMo6sABZroY33EQd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mucGWyKoptYrQAxv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/assigned-marks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@submitMarks',
        'controller' => 'App\\Http\\Controllers\\CourseController@submitMarks',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mucGWyKoptYrQAxv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RAMprIfitBUAgvWH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:262:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000f48b24c000000001f381f29";}";s:4:"hash";s:44:"SvOLd3sxNyXMuDGP3sRKI0jYKMBjUlzbqwoN93b6Qtg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RAMprIfitBUAgvWH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yIbmnv4r7QB0mSYT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yIbmnv4r7QB0mSYT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::99YvgrtTuvLImkny' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@userLogin',
        'controller' => 'App\\Http\\Controllers\\AuthController@userLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::99YvgrtTuvLImkny',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6fvk0AgWfnLunPxL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@teacherRegister',
        'controller' => 'App\\Http\\Controllers\\AuthController@teacherRegister',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6fvk0AgWfnLunPxL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AxUttM1DAjdwtVoy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'teacher/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@registrationTeacher',
        'controller' => 'App\\Http\\Controllers\\AuthController@registrationTeacher',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AxUttM1DAjdwtVoy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XrhRGptIguuzAtgQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@studentRegister',
        'controller' => 'App\\Http\\Controllers\\AuthController@studentRegister',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XrhRGptIguuzAtgQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qmACueLAGVRx0Hh9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'student/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@registrationStudent',
        'controller' => 'App\\Http\\Controllers\\AuthController@registrationStudent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qmACueLAGVRx0Hh9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YlWeiE8SJc8moKPF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminLayoutController@dashboard',
        'controller' => 'App\\Http\\Controllers\\AdminLayoutController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YlWeiE8SJc8moKPF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3gP0mVxsdlurCtTl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminLayoutController@tables',
        'controller' => 'App\\Http\\Controllers\\AdminLayoutController@tables',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3gP0mVxsdlurCtTl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::52K3ymOcRud3Aj8r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::52K3ymOcRud3Aj8r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xBUgpyn8LoQlOT5i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'super-admin/pending-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@pendingUsers',
        'controller' => 'App\\Http\\Controllers\\UserController@pendingUsers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xBUgpyn8LoQlOT5i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KuJiCK0w7bv3ynXV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'super-admin/approve-user/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@approveUser',
        'controller' => 'App\\Http\\Controllers\\UserController@approveUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KuJiCK0w7bv3ynXV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B770PgTz82781gc3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'super-admin/studentCreate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@studentCreate',
        'controller' => 'App\\Http\\Controllers\\AuthController@studentCreate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::B770PgTz82781gc3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oSjEEs4QeZnCpZAL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'super-admin/createStudent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@createStudent',
        'controller' => 'App\\Http\\Controllers\\AuthController@createStudent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oSjEEs4QeZnCpZAL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N7Bb6oujiTM4B9z7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'super-admin/adminCreate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@adminCreate',
        'controller' => 'App\\Http\\Controllers\\AuthController@adminCreate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N7Bb6oujiTM4B9z7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'createAdmin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'super-admin/createAdmin/{userId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@createAdmin',
        'controller' => 'App\\Http\\Controllers\\AuthController@createAdmin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'createAdmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rn2BsKvskqwmvIkw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'super-admin/teacherCreate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@teacherCreate',
        'controller' => 'App\\Http\\Controllers\\AuthController@teacherCreate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rn2BsKvskqwmvIkw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GKlvYQSMsex2ktVk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'super-admin/createTeacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@createTeacher',
        'controller' => 'App\\Http\\Controllers\\AuthController@createTeacher',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GKlvYQSMsex2ktVk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z1EY8C9R2yaVOjq6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'super-admin/dept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@dept',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@dept',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Z1EY8C9R2yaVOjq6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ujQb5VqHs59uWRME' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'super-admin/createDept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfSuperAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@createDept',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@createDept',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ujQb5VqHs59uWRME',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nwfsgkMTsdCiXwYW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pending-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@pendUsers',
        'controller' => 'App\\Http\\Controllers\\UserController@pendUsers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nwfsgkMTsdCiXwYW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tAvIiINPsGXrVuu2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/approve-user/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@appUser',
        'controller' => 'App\\Http\\Controllers\\UserController@appUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tAvIiINPsGXrVuu2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B2n3S56NWIgANCHX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/import-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@import',
        'controller' => 'App\\Http\\Controllers\\UserController@import',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::B2n3S56NWIgANCHX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'export-user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/export-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@exportUser',
        'controller' => 'App\\Http\\Controllers\\UserController@exportUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'export-user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'import-user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/import-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@importUser',
        'controller' => 'App\\Http\\Controllers\\UserController@importUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'import-user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QmrGj5KQc0iAtFV7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/adminUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@adminUser',
        'controller' => 'App\\Http\\Controllers\\AuthController@adminUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QmrGj5KQc0iAtFV7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ylLgYD6rG1Dz05C5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/userAdmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@userAdmin',
        'controller' => 'App\\Http\\Controllers\\AuthController@userAdmin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ylLgYD6rG1Dz05C5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eIdq8SV5SyGnJMiq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/signupTeacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@signupTeacher',
        'controller' => 'App\\Http\\Controllers\\AuthController@signupTeacher',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eIdq8SV5SyGnJMiq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VLEBxuaFTiXxjC2A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/teacherSignup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@teacherSignup',
        'controller' => 'App\\Http\\Controllers\\AuthController@teacherSignup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VLEBxuaFTiXxjC2A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QBPupDwe6WkPvL86' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/studentSignup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@studentSignup',
        'controller' => 'App\\Http\\Controllers\\AuthController@studentSignup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QBPupDwe6WkPvL86',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZcfneXpqWiS2DWjB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/signupStudent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@signupStudent',
        'controller' => 'App\\Http\\Controllers\\AuthController@signupStudent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZcfneXpqWiS2DWjB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RgBrv77n5xEiSfzQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@index',
        'controller' => 'App\\Http\\Controllers\\CourseController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RgBrv77n5xEiSfzQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fNZ39oNj41qM6f6h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@create',
        'controller' => 'App\\Http\\Controllers\\CourseController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fNZ39oNj41qM6f6h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MaTTSIS9FLRNALCe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/courses/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@store',
        'controller' => 'App\\Http\\Controllers\\CourseController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MaTTSIS9FLRNALCe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pME0goXGZObSQw47' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@edit',
        'controller' => 'App\\Http\\Controllers\\CourseController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pME0goXGZObSQw47',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Eb8QcQ0Y7SjN0Aq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/courses/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@update',
        'controller' => 'App\\Http\\Controllers\\CourseController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0Eb8QcQ0Y7SjN0Aq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ptzM0OROlysFZSkA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@destroy',
        'controller' => 'App\\Http\\Controllers\\CourseController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ptzM0OROlysFZSkA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bOQ4Qu7CTaxNbK5d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/courses/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@show',
        'controller' => 'App\\Http\\Controllers\\CourseController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bOQ4Qu7CTaxNbK5d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LKZB2EmCKuHTj7tp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/assigned_courses/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@index',
        'controller' => 'App\\Http\\Controllers\\SessionController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LKZB2EmCKuHTj7tp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TS1AaNIffENJzXJF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/assigned_courses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@create',
        'controller' => 'App\\Http\\Controllers\\SessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TS1AaNIffENJzXJF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qmsCm4Q3zriTalAm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/assigned_courses/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@store',
        'controller' => 'App\\Http\\Controllers\\SessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qmsCm4Q3zriTalAm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NJUU3Yyo856lhef9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/assigned_courses/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@show',
        'controller' => 'App\\Http\\Controllers\\SessionController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NJUU3Yyo856lhef9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OhzNvpLtPMcilviX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/assigned_courses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@edit',
        'controller' => 'App\\Http\\Controllers\\SessionController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OhzNvpLtPMcilviX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pF201U2RPZjb2s2e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/assigned_courses/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@update',
        'controller' => 'App\\Http\\Controllers\\SessionController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pF201U2RPZjb2s2e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ZvGhM9CjmXcpW5q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/assigned_courses/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\SessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0ZvGhM9CjmXcpW5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1kAImNzYyQ7VS6lE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add_sessions/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@sessionIndex',
        'controller' => 'App\\Http\\Controllers\\SessionController@sessionIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1kAImNzYyQ7VS6lE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::645jMIKMmeXszSYK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add_sessions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@sessionCreate',
        'controller' => 'App\\Http\\Controllers\\SessionController@sessionCreate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::645jMIKMmeXszSYK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W0DtSHBgzmOyMCj0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/add_sessions/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@sessionStore',
        'controller' => 'App\\Http\\Controllers\\SessionController@sessionStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W0DtSHBgzmOyMCj0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ksMioj6foohpuj3X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/add_sessions/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@sessionDestroy',
        'controller' => 'App\\Http\\Controllers\\SessionController@sessionDestroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ksMioj6foohpuj3X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'session.inactive' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_session/active/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@SessionInactive',
        'controller' => 'App\\Http\\Controllers\\SessionController@SessionInactive',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'session.inactive',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'session.active' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_session/inactive/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\SessionController@SessionActive',
        'controller' => 'App\\Http\\Controllers\\SessionController@SessionActive',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'session.active',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5vvm4vh2Vq1zpBbY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/enroll/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@enroll',
        'controller' => 'App\\Http\\Controllers\\StudentController@enroll',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5vvm4vh2Vq1zpBbY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uI1FELlpWNv5RzGl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/enroll/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@enrollIndex',
        'controller' => 'App\\Http\\Controllers\\StudentController@enrollIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uI1FELlpWNv5RzGl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cq926vmo2J8UnJT8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'student/enroll/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@postEnroll',
        'controller' => 'App\\Http\\Controllers\\StudentController@postEnroll',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Cq926vmo2J8UnJT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5kTxUu3cHLsYLDl4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/project/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5kTxUu3cHLsYLDl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JqtwQOVptKITM55s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'student/project/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\ProjectController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JqtwQOVptKITM55s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WhyfieTcAoJOZqsJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'student/project/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfStudent',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WhyfieTcAoJOZqsJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q1sxu3xiuBRR9XTg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/running-courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfTeacher',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@runningCourses',
        'controller' => 'App\\Http\\Controllers\\CourseController@runningCourses',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Q1sxu3xiuBRR9XTg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WPleI4q8W9eDdwYx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/marks-distribution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfTeacher',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@marksDistribute',
        'controller' => 'App\\Http\\Controllers\\CourseController@marksDistribute',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WPleI4q8W9eDdwYx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z64r7aPcjtdWcjRf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'teacher/marks-distribute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfTeacher',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@marksDistribution',
        'controller' => 'App\\Http\\Controllers\\CourseController@marksDistribution',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::z64r7aPcjtdWcjRf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6BFjiw71vAbsgxv5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/distributed-course/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfTeacher',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@distributedCourse',
        'controller' => 'App\\Http\\Controllers\\CourseController@distributedCourse',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6BFjiw71vAbsgxv5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3hf33zcUbO1CakUo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teacher/assign-marks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkLogin',
          2 => 'checkIfTeacher',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@assignMarks',
        'controller' => 'App\\Http\\Controllers\\CourseController@assignMarks',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3hf33zcUbO1CakUo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
