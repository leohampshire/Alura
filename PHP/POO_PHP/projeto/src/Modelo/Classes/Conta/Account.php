<?php


class account //NOMES DE CLASSES E ARQUIVOS DE CLASSES SEMPRE EM LETRAS MAICUSCULAS
{
    private string $cpf;
    private string $name;
    private float $balance;

    private static int $numOfAccounts;

    /**
     * account constructor.
     * @param string $cpf
     * @param string $name
     */
    public function __construct(string $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->balance = 0;

        Account::$numOfAccounts++;
    }

    public function __destruct()
    {
        self::$numOfAccounts--;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void //Código EXPLICITO sempre melhor que implicito (ex: colocar public))
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public static function getNumOfAccounts(): int
    {
        return self::$numOfAccounts;
    }

    public function create(string $cpf, string $nomeTitular, float $saldo): array
    {
        return [
            $cpf => [
                'titular' => $nomeTitular,
                'saldo' => $saldo,
            ]
        ];
    }

    public function sacar (float $valor): void
    {
        if ($this->balance < $valor){
            echo ("Saldo Insuficiente");
            return;
        }

        $this->balance -= $valor;
    }

    public function depositar (float $valor): void
    {
        if ($valor <= 0){
            echo ("O valor precisa ser positivo");
            return;
        }
        $this->balance += $valor;
    }

    public function transfere (float $valor, Account $conta): void
    {
        if ($this->balance < $valor){
            echo ("Saldo insuficiente");
            return;
        }

        $this->balance -= $valor;
        $conta->depositar($valor);
    }

}
