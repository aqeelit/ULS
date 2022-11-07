@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>Knowledge Level Test</h2>
        <form id="examForm" class="form-horizontal" method="POST" action="{{ route('level.calculate') }}">
            {{ csrf_field() }}
            <input type="hidden" name="level_id"  value="{{$level_id}}">
            <p>Q 1- What is the output for ? 'you are doing well' [2:999]</p>
            <input type="radio" id="q11" name="q1" value="{{'1'}}">
            <label for="male">A - 'you are doing well'</label><br>
            <input type="radio" id="q12" name="q1" value="{{'0'}}">
            <label for="female">B - Index error.</label><br>
            <input type="radio" id="q13" name="q1" value="{{'0'}}">
            <label for="other">C - 'u are doing well'</label><br><br>

            <br>

            <p>Q 2- What is output of following code ? <br>
                x = 2 <br>
                y = 10 <br>
                x * = y * x + 1 <br>
            </p>
            <input type="radio" id="q21" name="q2" value="{{'0'}}">
            <label for="age1">A - 41</label><br>
            <input type="radio" id="q22" name="q2" value="{{'0'}}">
            <label for="age2">B - 39</label><br>
            <input type="radio" id="q23" name="q2" value="{{'1'}}">
            <label for="age3">C - 42</label><br><br>

            <br>

            <p>Q 3 - Select the option for following code ? <br>

                s = 0 <br>
                for d in range(0, 5, 0.1): <br>
                 s += d <br>
                 print(s) <br>

            </p>
            <input type="radio" id="q31" name="q3" value="{{'0'}}">
            <label for="age1">A - Syntax Error</label><br>
            <input type="radio" id="q32" name="q3" value="{{'1'}}">
            <label for="age2">B - Both b & c</label><br>
            <input type="radio" id="q33" name="q3" value="{{'0'}}">
            <label for="age3">C - Runtime Error</label><br><br>

            <br>

            <p>Q 4 - What is output for ? min(''hello world'')</p>
            <input type="radio" id="q41" name="q4" value="{{'0'}}">
            <label for="age1">A - e</label><br>
            <input type="radio" id="q42" name="q4" value="{{'0'}}">
            <label for="age2">B - None of the above.</label><br>
            <input type="radio" id="q43" name="q4" value="{{'1'}}">
            <label for="age3">C - a blank space character</label><br><br>

            <br>

            <p>Q 5 - What is output of following ? <br>

                print(''abbzxyzxzxabb''.count('abb',-10,-1)) <br>

            </p>
            <input type="radio" id="q51" name="q5" value="{{'0'}}">
            <label for="age1">A - 2</label><br>
            <input type="radio" id="q52" name="q5" value="{{'1'}}">
            <label for="age2">B - 0</label><br>
            <input type="radio" id="q53" name="q5" value="{{'0'}}">
            <label for="age3">D - Error</label><br><br>

            <br>

            <p>Q 6 - What is the output of the following code? <br>

                eval(''1 + 3 * 2'') <br>
            </p>
            <input type="radio" id="q61" name="q6" value="{{'1'}}">
            <label for="age1">A - 7</label><br>
            <input type="radio" id="q62" name="q6" value="{{'0'}}">
            <label for="age2">B - '1+6'</label><br>
            <input type="radio" id="q63" name="q6" value="{{'0'}}">
            <label for="age3">C - '4*2'</label><br><br>

            <br>

            <p>Q 7 - What is the out of the code? <br>
                def rev_func(x,length): <br>
                print(x[length-1],end='' '') <br>
                rev_func(x,length-1) <br>
                x=[11, 12, 13, 14, 15] <br>
                rev_func(x,5) <br>
            </p>
            <input type="radio" id="q71" name="q7" value="{{'0'}}">
            <label for="age1">A - The program runs fine without error.</label><br>
            <input type="radio" id="q72" name="q7" value="{{'0'}}">
            <label for="age2">B - Program displays 15 14 13 12 11.</label><br>
            <input type="radio" id="q73" name="q7" value="{{'1'}}">
            <label for="age3">C - Program displays 15 14 13 12 11 and then raises an index out of range exception.</label><br><br>

            <br>

            <p>Q 8 - How to create a frame in Python?</p>
            <input type="radio" id="q81" name="q8" value="{{'0'}}">
            <label for="age1">A - Frame = new.window()</label><br>
            <input type="radio" id="q82" name="q8" value="{{'0'}}">
            <label for="age2">B - Frame = frame.new()</label><br>
            <input type="radio" id="q83" name="q8" value="{{'1'}}">
            <label for="age3">C - Frame = Frame()</label><br><br>

            <br>

            <p>Q 9 - Select the correct code to create a button under a parent window with command processButton</p>
            <input type="radio" id="q91" name="q9" value="{{'0'}}">
            <label for="age1">A - Button(set.text= ''Hello'' )</label><br>
            <input type="radio" id="q92" name="q9" value="{{'0'}}">
            <label for="age2">B - Button(window ,text= ''Ok'' ,fg= ''black '')</label><br>
            <input type="radio" id="q93" name="q9" value="{{'1'}}">
            <label for="age3">C - Button(window ,text= ''Hello'' ,command=processButton)</label><br><br>

            <br>

            <p>Q 10 - What is the value of a, b, c in the given below code? <br>
                a, b = c = 2 + 2, ''Tutorials'' <br>
            </p>
            <input type="radio" id="q101" name="q10" value="{{'0'}}">
            <label for="age1">
                A - a=4, 'Tutorials' | b= 4, 'Tutorials' | c= 4, 'Tutorials'
            </label><br>
            <input type="radio" id="q102" name="q10" value="{{'0'}}">
            <label for="age2">
                B - a=2  | b= 'Tutorials' | c=4, 'Tutorials'
            </label><br>
            <input type="radio" id="q103" name="q10" value="{{'1'}}">
            <label for="age3">
                C - a=4  | b= 'Tutorials' | c=4, 'Tutorials'
            </label><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection