<?php
include "../include/connection.php";
include "header_emp2.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/jkanban.min.css" />
    <script src="./dist/jkanban.js"></script>
</head>

<body>
    <div id="myKanban">



        <script>
            myBoards = [{
                    id: "_todo",
                    title: "To Do (Can drop item only in working)",
                    class: "info,good",
                    dragTo: ["_working"],
                    item: [{
                            id: "_test_delete",
                            title: "Try drag this (Look the console)",
                            drag: function(el, source) {
                                console.log("START DRAG: " + el.dataset.eid);
                            },
                            dragend: function(el) {
                                console.log("END DRAG: " + el.dataset.eid);
                            },
                            drop: function(el) {
                                console.log("DROPPED: " + el.dataset.eid);
                            }
                        },
                        {
                            title: "Try Click This!",
                            click: function(el) {
                                alert("click");
                            },
                            class: ["peppe", "bello"]
                        }
                    ]
                },
                {
                    id: "_working",
                    title: "Working (Try drag me too)",
                    class: "warning",
                    item: [{
                            title: "Do Something!"
                        },
                        {
                            title: "Run?"
                        }
                    ]
                },
                {
                    id: "_done",
                    title: "Done (Can drop item only in working)",
                    class: "success",
                    dragTo: ["_working"],
                    item: [{
                            title: "All right"
                        },
                        {
                            title: "Ok!"
                        }
                    ]
                }
            ]


            var KanbanTest = new jKanban({
                element: "#myKanban",
                boards: myBoards
            })





            var KanbanTest = new jKanban({
                element: "#myKanban",
                boards: myBoards,
                addItemButton: true,
                buttonContent: '+',
                buttonClick: function(el, boardId) {
                    console.log(el);
                    console.log(boardId);
                    // create a form to enter element
                    var formItem = document.createElement("form");
                    formItem.setAttribute("class", "itemform");
                    formItem.innerHTML =
                        '<div class="form-group"><textarea class="form-control" rows="2" autofocus></textarea></div><div class="form-group"><button type="submit" class="btn btn-primary btn-xs pull-right">Submit</button><button type="button" id="CancelBtn" class="btn btn-default btn-xs pull-right">Cancel</button></div>';
                    KanbanTest.addForm(boardId, formItem);
                    formItem.addEventListener("submit", function(e) {
                        e.preventDefault();
                        var text = e.target[0].value;
                        KanbanTest.addElement(boardId, {
                            title: text
                        });
                        formItem.parentNode.removeChild(formItem);
                    });
                    document.getElementById("CancelBtn").onclick = function() {
                        formItem.parentNode.removeChild(formItem);
                    };
                },
            })






            var KanbanTest = new jKanban({
                // space between boards
                gutter: '15px',
                // board width
                widthBoard: '250px',
                // use percentage in the width of the boards
                responsivePercentage: false,
                // make work items draggable?
                dragItems: true,

                // make boards draggable?
                dragBoards: true,
                // config item drag handle
                itemHandleOptions: {
                    enabled: false,
                    customCssHandler "drag_handler",
                    customCssIconHandler: "drag_handler_icon",
                    customHandler: "+ %s"
                    title
                }

            })



            var KanbanTest = new jKanban({
                click: function(el) {
                    // when an item is clicked
                },
                dragEl: function(el, source) {
                    // when an item is dragging
                },
                dragendEl: function(el) {
                    // when an item stops dragging
                },
                dropEl: function(el, target, source, sibling) {
                    // when an item is dropped
                },
                dragBoard: function(el, source) {
                    // when a board is dragging
                },

                dragendBoard: function(el) {
                    // when a board stops dragging
                }
            })









            KanbanTest.addElement(boardID, element);
            // add a form element
            KanbanTest.addForm(boardID, formItem);
        </script>
    </div>




</body>

</html>