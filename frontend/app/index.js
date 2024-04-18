<<<<<<< HEAD
import { Redirect } from 'expo-router';

export default function Index() {
  return <Redirect href={'/(tabs)/location'} />;
}
=======
import { StyleSheet, Text, View } from "react-native";
import Maps from "../components/maps";

export default function Page() {
  return (
    <View style={styles.container}>
      <View style={styles.main}>
        <Text style={styles.title}>est s</Text>
        <Text style={styles.subtitle}>This is the first page of your app.</Text>
      </View>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    padding: 24,
  },
  main: {
    flex: 1,
    justifyContent: "center",
    maxWidth: 960,
    marginHorizontal: "auto",
  },
  title: {
    fontSize: 64,
    fontWeight: "bold",
  },
  subtitle: {
    fontSize: 36,
    color: "#38434D",
  },
});
>>>>>>> 95d582054d2172556fc9280fe9c6bce55cf341ea
