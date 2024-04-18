import { Stack } from "expo-router";

export default function _layout(){
return < Stack screenOptions={{
    headerShown:false,
    headerStyle:{
        backgroundColor: "pink"
    },
    headerTintColor:
        "white",
}}>

<Stack.Screen name="index"/>

</Stack>
}