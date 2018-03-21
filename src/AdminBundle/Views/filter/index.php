<h1>#Фильтры</h1>
<script>
    function makeThing(spec) {
        const secret = 'shhh!';
        return Object.freeze({
            doStuff
        });
        function doStuff () {
// Здесь мы можем пользоваться и spec,
// и secret
        }
    }
    //здесь свойство secret недоступно
    var thing = makeThing();
    alert(thing.secret); // undefined



    const helloWorld = () => 'Hello World!';

    helloWorld();

</script>
