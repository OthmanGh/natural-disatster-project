import { Stack } from 'expo-router';

export default function _layout() {
  return (
    <Stack
      screenOptions={{
        headerShown: false,
        headerStyle: {
          backgroundColor: 'pink',
        },
        headerTintColor: 'white',
      }}
    >
      <Stack.Screen name="(tabs)" options={{ contentStyle: { backgroundColor: '#f3f3f3' } }} />
    </Stack>
  );
}
