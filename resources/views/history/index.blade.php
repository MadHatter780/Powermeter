@extends('base.index')
@section('content')
    <script src="https://balkan.app/js/familytree.js"></script>

    <div class="pt-2 w-full h-full">
        <div class="bg-white rounded-md shadow-lg w-full h-full">
            <div id="tree" />


        </div>
    </div>

    <script>
        var family = new FamilyTree(document.getElementById("tree"), {
            mouseScrool: FamilyTree.action.none,
            nodeBinding: {
                field_0: "name"
            },
            nodes: [{
                    id: 1,
                    pids: [2],
                    name: "Amber McKenzie",
                    gender: "female"
                },
                {
                    id: 2,
                    pids: [1],
                    name: "Ava Field",
                    gender: "male"
                },
                {
                    id: 2,
                    pids: [3],
                    name: "Ava Field",
                    gender: "male"
                },
                {
                    id: 3,
                    mid: 1,
                    fid: 2,
                    name: "Peter Stevens",
                    gender: "male"
                },
                {
                    id: 3,
                    mid: 1,
                    fid: 2,
                    name: "Peter Stevens",
                    gender: "male"
                }
            ]
        });
    </script>
@endsection
