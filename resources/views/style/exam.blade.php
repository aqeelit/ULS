@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>Learning Style Test</h2>
        <form id="examForm" class="form-horizontal" method="POST" action="{{ route('style.exam') }}">
            {{ csrf_field() }}
            <input type="hidden" name="user_id"  value="{{$user_id}}">
            <input type="hidden" id="a0" name="q0" value="{{'sensing'}}">
            <input type="hidden" id="b0" name="q0" value="{{'intuitive'}}">
            <input type="hidden" id="a1" name="q1" value="{{'visual'}}">
            <input type="hidden" id="b1" name="q1" value="{{'verbal'}}">

            <br>

            <p>1- I would rather be considered</p>
            <input type="radio" id="a2" name="q2" value="{{'sensing'}}">
            <label for="a"> (a) realistic.</label><br>
            <input type="radio" id="b2" name="q2" value="{{'intuitive'}}">
            <label for="b"> (b) innovative.</label><br>


            <br>

            <p>2- When I think about what I did yesterday, I am most likely to get</p>
            <input type="radio" id="a3" name="q3" value="{{'visual'}}">
            <label for="a"> (a) a picture</label><br>
            <input type="radio" id="b3" name="q3" value="{{'verbal'}}">
            <label for="b"> (b) words.</label><br>

            <br>

          
            <p>3- If I were a teacher, I would rather teach a course </p>
            <input type="radio" id="a6" name="q6" value="{{'sensing'}}">
            <label for="a"> (a) that deals with facts and real life situations.</label><br>
            <input type="radio" id="b6" name="q6" value="{{'intuitive'}}">
            <label for="b"> (b) that deals with ideas and theories.</label><br>


            <br>

            <p>4- I prefer to get new information in</p>
            <input type="radio" id="a7" name="q7" value="{{'visual'}}">
            <label for="a">(a) pictures, diagrams, graphs, or maps.</label><br>
            <input type="radio" id="b7" name="q7" value="{{'verbal'}}">
            <label for="b">(b) written directions or verbal information.</label><br>

            <br>

            <p>5- I find it easier</p>
            <input type="radio" id="a10" name="q10" value="{{'sensing'}}">
            <label for="a">(a) to learn facts.</label><br>
            <input type="radio" id="a10" name="q10" value="{{'intuitive'}}">
            <label for="b">(b) to learn concepts.</label><br>

            <br>

            <p>6- In a book with lots of pictures and charts, I am likely to</p>
            <input type="radio" id="a11" name="q11" value="{{'visual'}}">
            <label for="a">(a) look over the pictures and charts carefully.</label><br>
            <input type="radio" id="b11" name="q11" value="{{'verbal'}}">
            <label for="b">(b) focus on the written text.</label><br>

            <br>

            <p>7- In reading non-fiction, I prefer</p>
            <input type="radio" id="a14" name="q14" value="{{'sensing'}}">
            <label for="a">(a) something that teaches me new facts or tells me how to do something.</label><br>
            <input type="radio" id="b14" name="q14" value="{{'intuitive'}}">
            <label for="b">(b) something that gives me new ideas to think about.</label><br>

            <br>

            <p>8- When I'm analysing a story or a novel</p>
            <input type="radio" id="a15" name="q15" value="{{'visual'}}">
            <label for="a">(a) I think of the incidents and try to put them together to figure out the themes.</label><br>
            <input type="radio" id="b15" name="q15" value="{{'verbal'}}">
            <label for="b">(b) I just know what the themes are when I finish reading and then I have to go back and find the incidents that demonstrate them.</label><br>

            <br>

            <p>9- I prefer the idea of</p>
            <input type="radio" id="a18" name="q18" value="{{'sensing'}}">
            <label for="a">(a) certainty.</label><br>
            <input type="radio" id="b18" name="q18" value="{{'intuitive'}}">
            <label for="b">(b) theory.</label><br>


            <br>

            <p>10- I remember best</p>
            <input type="radio" id="a19" name="q19" value="{{'visual'}}">
            <label for="a">(a) what I see.</label><br>
            <input type="radio" id="b19" name="q19" value="{{'verbal'}}">
            <label for="b">(b) what I hear.</label><br>

            <br>

            <p>11- I am more likely to be considered</p>
            <input type="radio" id="a22" name="q22" value="{{'sensing'}}">
            <label for="a">(a) careful about the details of my work.</label><br>
            <input type="radio" id="b22" name="q22" value="{{'intuitive'}}">
            <label for="b">(b) creative about how to do my work.</label><br>


            <br>

            <p>12- When I get directions to a new place, I prefer</p>
            <input type="radio" id="a23" name="q23" value="{{'visual'}}">
            <label for="a">(a) a map.</label><br>
            <input type="radio" id="b23" name="q23" value="{{'verbal'}}">
            <label for="b">(b) written instructions.</label><br>

            <br>

            <p>13- When I am reading for enjoyment, I like writers to</p>
            <input type="radio" id="a26" name="q26" value="{{'sensing'}}">
            <label for="a">(a) clearly say what they mean.</label><br>
            <input type="radio" id="b26" name="q26" value="{{'intuitive'}}">
            <label for="b">(b) say things in creative, interesting ways.</label><br>


            <br>

            <p>14- When I see a diagram or sketch in class, I am most likely to remember</p>
            <input type="radio" id="a27" name="q27" value="{{'visual'}}">
            <label for="a">(a) the picture.</label><br>
            <input type="radio" id="b27" name="q27" value="{{'verbal'}}">
            <label for="b">(b) what the instructor said about it.</label><br>

            <br>

            <p>15- When I have to perform a task, I prefer to</p>
            <input type="radio" id="a30" name="q30" value="{{'sensing'}}">
            <label for="a">(a) master one way of doing it.</label><br>
            <input type="radio" id="b30" name="q30" value="{{'intuitive'}}">
            <label for="b">(b) come up with new ways of doing it.</label><br>


            <br>

            <p>16- When someone is showing me data, I prefer</p>
            <input type="radio" id="a31" name="q31" value="{{'visual'}}">
            <label for="a">(a) charts or graphs.</label><br>
            <input type="radio" id="b31" name="q31" value="{{'verbal'}}">
            <label for="b">(b) text summarizing the results.</label><br>

            <br>

            <p>17- I consider it higher praise to call someone</p>
            <input type="radio" id="a34" name="q34" value="{{'sensing'}}">
            <label for="a">(a) sensible.</label><br>
            <input type="radio" id="b34" name="q34" value="{{'intuitive'}}">
            <label for="b">(b) imaginative.</label><br>


            <br>

            <p>18- When I meet people at a party, I am more likely to remember</p>
            <input type="radio" id="a35" name="q35" value="{{'visual'}}">
            <label for="a">(a) what they looked like.</label><br>
            <input type="radio" id="b35" name="q35" value="{{'verbal'}}">
            <label for="b">(b) what they said about themselves.</label><br>

            <br>

            <p>19- I prefer courses that emphasise</p>
            <input type="radio" id="a38" name="q38" value="{{'sensing'}}">
            <label for="a">(a) concrete material (facts, data).</label><br>
            <input type="radio" id="b38" name="q38" value="{{'intuitive'}}">
            <label for="b">(b) abstract material (concepts, theories).</label><br>


            <br>

            <p>20- For entertainment, I would rather</p>
            <input type="radio" id="a39" name="q39" value="{{'visual'}}">
            <label for="a">(a) watch television.</label><br>
            <input type="radio" id="b39" name="q39" value="{{'verbal'}}">
            <label for="b">(b) read a book.</label><br>

            <br>

            <p>21- When I am doing long calculations,</p>
            <input type="radio" id="a42" name="q42" value="{{'sensing'}}">
            <label for="a">(a) I tend to repeat all my steps and check my work carefully.</label><br>
            <input type="radio" id="b42" name="q42" value="{{'intuitive'}}">
            <label for="b">(b) I find checking my work tiresome and have to force myself to do it.</label><br>


            <br>

            <p>22- I tend to picture places I have been</p>
            <input type="radio" id="a43" name="q43" value="{{'visual'}}">
            <label for="a">(a) easily and fairly accurately.</label><br>
            <input type="radio" id="b43" name="q43" value="{{'verbal'}}">
            <label for="b">(b) with difficulty and without much detail.</label><br>


            <br>


            <input type="submit" value="Submit">
        </form>
    </div>
@endsection