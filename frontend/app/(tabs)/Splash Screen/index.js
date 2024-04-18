import { Redirect } from 'expo-router';
import { StyleSheet, Text, View } from 'react-native';
import { LinearGradient } from 'expo-linear-gradient';
export default function Page() {
  return (
    <LinearGradient colors={['#FF0000', '#FFB841']} style={styles.container}>
      <View style={styles.main}>
        <Text style={styles.title}>ResQ</Text>
        <Text style={styles.subtitle}>Where Help Finds You</Text>
      </View>
    </LinearGradient>
  );
}
const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: 'center',
    padding: 24,
    backgroundColor: 'orange', // Fallback color
  },
  main: {
    flex: 1,
    justifyContent: 'center',
    maxWidth: 960,
    marginHorizontal: 'auto',
  },
  title: {
    display: 'flex',
    justifyContent: 'center',
    fontSize: 64,
    fontWeight: 'bold',
  },
  subtitle: {
    fontSize: 36,
    color: '#38434D',
  },
});
