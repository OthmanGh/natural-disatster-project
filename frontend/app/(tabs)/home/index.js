import { Text, View, StyleSheet, ScrollView, TextInput } from 'react-native';
import { useRouter } from 'expo-router';
import { MaterialIcons } from '@expo/vector-icons';
import { FontAwesome } from '@expo/vector-icons';
import { EvilIcons } from '@expo/vector-icons';
import { AntDesign } from '@expo/vector-icons';

export default function Home() {
  const router = useRouter();

  return (
    <View style={styles.container}>
      <AntDesign name="earth" size={24} color="black" />
      <EvilIcons name="search" size={24} color="black" />
      <FontAwesome name="microphone" size={24} color="black" />
      <MaterialIcons name="notifications-none" size={24} color="black" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    display: 'flex',
    alignItems: 'center',
    justifyContent: 'justify-container',
  },
});
