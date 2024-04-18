import React from 'react';
import { AntDesign } from '@expo/vector-icons';
import { EvilIcons } from '@expo/vector-icons';
import { MaterialIcons } from '@expo/vector-icons';
import { Octicons } from '@expo/vector-icons';
import { Tabs } from 'expo-router';

export default function _layout() {
  return (
    <Tabs screenOptions={{ headerShown: false }}>
      <Tabs.Screen name="home" options={{ tabBarLabel: 'Home', title: 'Home', tabBarIcon: () => <AntDesign name="home" size={24} color="#999898" /> }} />
    </Tabs>
  );
}
