var teste: String? = "Olá!, Favor informar nome"

fun testeget() = "ola kotlin"

fun main() {
    println(teste)

    println("Informe seu nome:")
    var nome = readLine()

    if (nome != null) {
        val msg = "Seja bem vindo! $nome"
        println(msg)
    } else {
        println("Favor repetir processo")

        val testeprint: String? = when (teste) {
            null -> "oii"
            else -> teste
        }

        println(testeprint)
        println(testeget())
    }
}

