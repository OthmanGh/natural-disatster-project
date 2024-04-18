import { Text, View, TouchableOpacity, ScrollView, Button, Image, StyleSheet } from 'react-native';
import { EvilIcons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';

export default function Location() {
  const router = useRouter();

  const CustomButton = ({ title, onPress }) => {
    return (
      <TouchableOpacity onPress={onPress} style={styles.button}>
        <Text style={styles.buttonText}>{title}</Text>
      </TouchableOpacity>
    );
  };

  return (
    <View style={styles.container}>
      <EvilIcons name="location" size={64} color="red" />
      <Text style={styles.title_text}>Location Required</Text>
      <Text style={styles.para_text}>To ensure your safety during emergencies our app requires locatin acess</Text>
      <CustomButton title="Allow Location" onPress={() => {}} />
      <Text style={styles.not_now} onPress={() => {}}>
        Not Now
      </Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    gap: '20px',
    padding: '10px',
  },

  title_text: {
    fontSize: '24px',
    fontWeight: 'bold',
  },

  para_text: {
    fontSize: '18px',
    textAlign: 'center',
    width: '85%',
    fontWeight: '500',
  },

  button: {
    backgroundColor: 'red',
    padding: 10,
    borderRadius: 5,
    width: '80%',
  },
  buttonText: {
    color: 'white',
    fontSize: 16,
    fontWeight: 'bold',
    textAlign: 'center',
  },
});
