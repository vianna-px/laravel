<!DOCTYPE html>
<html>
    <!--
        WARNING! Make sure that you match all Quasar related
        tags to the same version! (Below it's "@1.12.8")
    -->

    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/quasar@1.12.8/dist/quasar.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
            <div class="q-pa-md q-gutter-sm">
                <q-btn style="background: #FF0080; color: white" label="Fuchsia">Fuchsia</q-btn>
                <q-btn flat style="color: #FF0080" label="Fuchsia Flat">Fuchsia Flat</q-btn>
                <q-btn style="background: goldenrod; color: white" label="Goldenrod">Goldenrod</q-btn>
                <q-btn outline style="color: goldenrod;" label="Goldenrod">Goldenrod</q-btn>
                <q-btn color="grey-4" text-color="purple" glossy unelevated icon="camera_enhance" label="Purple text">Purple Text</q-btn>
            </div>

        <!-- Add the following at the end of your body tag -->
        
        <script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quasar@1.12.8/dist/quasar.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quasar@1.12.8/dist/lang/pt-br.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/quasar@1.12.8/dist/icon-set/fontawesome-v5.umd.min.js"></script>
        
        <script>
        Quasar.lang.set(Quasar.lang.ptBr)
        Quasar.iconSet.set(Quasar.iconSet.fontawesomeV5)

        /*
            Example kicking off the UI. Obviously, adapt this to your specific needs.
            Assumes you have a <div id="q-app"></div> in your <body> above
        */
        new Vue({
            el: '#q-app',
            data: function () {
            return {}
            },
            methods: {},
            // ...etc
        })
        </script>
    </body>
</html>