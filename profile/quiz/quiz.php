<html>
<head>

    <script type='text/javascript'>

        function createfield(name ,number,style,op)
        {

            var input = document.createElement("input");
            input.type = "textarea";
            if(style == 0 )
            {
                input.style = "width : 800px ; height: 100px; background-color: lightgreen;";
                input.name = name + number;
            }
            else if(style == 1)
            {
                input.style = "width : 400px ; height: 50px; background-color: lightgreen;";
                input.name = name + number+op;
            }

            else if(style == 2)
            {
                input.type = "number"
                input.name = name + number+op;
            }


            return input;

        }

        function _break(container,name,number)
        {
            container.appendChild(document.createElement("br"));
            container.appendChild(document.createElement("br"));

            container.appendChild(document.createTextNode(name+": "+number));
            return container;

        }
        function addFields()
        {
            // Number of inputs to create
            var number = document.getElementById("count").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes())
            {
                container.removeChild(container.lastChild);
            }
            for (i=1; i<=number; i++)
            {
                // Append a node with a random text

                container.appendChild(document.createTextNode("Question: " + i));

                // Create an <input> element, set its type and name attributes


                var input = createfield("Question",i,0,0);


                var op1 = createfield("Option",1,1,i);
                var wop1 = createfield("wop",1,2,i);

                var op2 = createfield("Option",2,1,i);
                var wop2 = createfield("wop",2,2,i);

                var op3 = createfield("Option",3,1,i);
                var wop3 = createfield("wop",3,2,i);

                var ans = createfield("Answer",0,2,i);


                /*input.type = "textarea";
                 input.style = "width : 800px ; height: 100px; background-color: lightgreen;";
                 input.name = "question" + (i+1);*/
                container.appendChild(input);

                container=_break(container,"Weight_question ",i);

                container.appendChild(ans);

                container=_break(container,"Option",1);

                container.appendChild(op1);

                container=_break(container,"Weight",1);

                container.appendChild(wop1);


                container= _break(container,"Option",2);

                container.appendChild(op2);

                container=_break(container,"Weight",2);

                container.appendChild(wop2);

                container=_break(container,"Option",3);

                container.appendChild(op3);

                container=_break(container,"Weight",3);

                container.appendChild(wop3);
                container.appendChild(document.createElement("br"));
                container.appendChild(document.createElement("br"));





            }
            container.appendChild(document.createElement("br"));
            container.appendChild(document.createElement("br"));

            container.appendChild(document.createElement("br"));
            var butn= document.createElement("input");
           // butn.value="submit";



            butn.type = "submit" ;
            butn.name = "submit" ;
            butn.value = "submit";


            container.appendChild(butn);
            // Append a line break
            container.appendChild(document.createElement("br"));
            container.appendChild(document.createElement("br"));

        }

    </script>
</head
<body>

<center>
    Number of Questions: <br/>
    <input type="textarea" style = "padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: lightgreen;
    font-size: 16px;
    resize: none;"  id="count" name="count" value="">
    <button onclick="addFields()">Fill Details</button>
    <br><br>
    <form action = "http://localhost/psycho_help/load.php" method="GET">

        <div id="container"/>


    </form>
    </center>
</body>
</html>
