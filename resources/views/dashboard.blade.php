@extends('layout.app')

@section('title', "Timo's dashboard")

@section('css')
    @vite("resources/css/dashboard.css")
@endsection

@section('main-content')
    @php
        function findCorrespondingTest($tests, $course_id) {
            return array_filter($tests, function ($test) use ($course_id) {
                return $test->course_id === $course_id;
            });
        }
    @endphp
    <main>
        <div class="credits-earned">
            <h2>Credits Earned</h2>
            <div class="credits-container">
                @php
                    $earnedCredits = 0;
                    foreach ($courses as $course) {
                        if ($course->passed_at) {
                            $earnedCredits += $course->credits;
                        }
                    }
                @endphp
                {{ $earnedCredits }} / 60
            </div>
        </div>

        @foreach ($courses as $course)
            <table>
                <thead>
                <tr>
                    <th>
                        <p class="course-title">
                            {{ $course->name }}
                        </p>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="col-span-3">Available Credits</td>
                    <td class="col-span-3">
                        {{ $course->credits }}
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Weighting</td>
                    <td>Completed</td>
                    <td>Grade</td>
                </tr>

                @foreach ($tests as $test)
                    @if ($test->course_id === $course->id)
                        <tr>
                            <td>{{ $test->name }}</td>
                            <td>{{ $test->weighting_factor }}</td>
                            <td>{{ $test->best_grade ? 'Yes' : 'No' }}</td>
                            <td>{{ $test->best_grade }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        @endforeach
    </main>
@endsection
