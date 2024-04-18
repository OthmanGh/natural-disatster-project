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
{/* <Stack.Screen name="login" options={{headerShown:false, contentStyle:{backgroundColor:"white"}}}/> */}
<Stack.Screen name="login"/>
<Stack.Screen name="signup" />
<Stack.Screen name="productDetails" />
<Stack.Screen name="(tabs)" options={{contentStyle:{backgroundColor:"#f3f3f3"}}}/>
</Stack>
}